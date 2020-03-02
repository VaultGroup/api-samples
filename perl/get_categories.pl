#!/usr/bin/perl

use strict;
use warnings;

use FindBin;
use File::Spec;
use lib File::Spec->catdir($FindBin::Bin, '.');

use VaultREAPI;

use JSON;

my $api_key = $ARGV[0];
my $bearer_token = $ARGV[1];

if (!$api_key || !$bearer_token) {
    die "Usage: $0 <api_key> <bearer_token>\n";
}

my $api = new VaultREAPI($api_key, $bearer_token);

# Get user
my ($code, $result) = $api->get('/categories/contact?sort=name');

print "HTTP Response Code: " . $code . "\n";

if ($result) {

    $result = decode_json($result);

    foreach my $item (@{$result->{"items"}}) {
        print $item->{"id"} . ": " . $item->{"name"} . "\n";
    }

}


exit;
