# rfc822-mailzu
PHP email address, local part and domain validator based on RFCs 822, 2822, 5322

This modified version of the code allows for the partial checking of email addresses, local parts and domains.
By default the code works as before but if the extra options are used, the code can be made to check whether some
string is just a local part or just a domain. That means that if one provides a full email address while asking to
perform a domain check, the could will return an error because a full email addresss is not a domain. Likewise the
test of a local part on a full email address will return an error also. Also local parts may well not be domain names
and vice versa. The PHP built-in FILTER_VALIDATE_DOMAIN was tested but did not appear to produce the right answers at
all times.
