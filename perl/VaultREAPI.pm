#/usr/bin/perl

package VaultREAPI;

use strict;
use warnings;

use Carp;
use HTTP::Request::Common;
use LWP::UserAgent;

sub new {

    my $class = shift;

    my $self = {
        api_key => shift,
        bearer_token => shift,
        base_url => 'https://ap-southeast-2.api.vaultre.com.au/api/v1.2',
    };

    croak "Missing API key" unless $self->{api_key};
    croak "Missing Bearer token" unless $self->{bearer_token};

    my $ua = LWP::UserAgent->new;
    $ua->agent("VaultRE/1.0");

    $self->{ua} = $ua;

    return bless $self, $class;

}


sub get {

    my ($self, $endpoint) = @_;

    my $headers = HTTP::Headers->new();
    $headers->header(Accept => "application/json");
    $headers->header(Authorization => "Bearer " . $self->{bearer_token});
    $headers->header(X_Api_Key => $self->{api_key});

    my $uri = $self->{base_url} . $endpoint;

    my $request = HTTP::Request->new('GET', $uri, $headers);

    my $response = $self->{ua}->request($request);

    return ($response->code, $response->content);

}


sub post {
    croak "Not implemented yet";
}


sub put {
    croak "Not implemented yet";
}


sub delete {

    my ($self, $endpoint) = @_;

    my $headers = HTTP::Headers->new();
    $headers->header(Accept => "application/json");
    $headers->header(Authorization => "Bearer " . $self->{bearer_token});
    $headers->header(X_Api_Key => $self->{api_key});

    my $uri = $self->{base_url} . $endpoint;

    my $request = HTTP::Request->new('DELETE', $uri, $headers);

    my $response = $self->{ua}->request($request);

    return ($response->code, $response->content);

}

1;
