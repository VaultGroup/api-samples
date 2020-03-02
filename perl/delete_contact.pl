#!/usr/bin/perl

use strict;
use warnings;

use FindBin;
use File::Spec;
use lib File::Spec->catdir($FindBin::Bin, '.');

use VaultREAPI;

my $api_key = $ARGV[0];
my $bearer_token = $ARGV[1];

if (!$api_key || !$bearer_token) {
    die "Usage: $0 <api_key> <bearer_token>\n";
}

my $api = new VaultREAPI($api_key, $bearer_token);

# Get user
my ($code, $result) = $api->delete('/contacts/1234');

print "HTTP Response Code: " . $code . "\n";

if ($result) {
    print $result;
}

exit;
