<?php

/**
 * @param String[] $emails
 * @return Integer
 */
function numUniqueEmails($emails) {
    $uniqueEmails = [];

    foreach ($emails as $email) {
        $localName = explode('@', $email);
        $localName = explode('+', $localName[0])[0];
        $domainName = explode('@', $email)[1];
        $localName = str_replace('.', '', $localName);
        $localName = str_replace('-', '', $localName);
        $uniqueEmails[] = $localName . '@' . $domainName;
    }
    return count(array_unique($uniqueEmails));
}

//Example 1:
$emails1 = ["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"]; //Output: 2
//Explanation: "testemail@leetcode.com" and "testemail@lee.tcode.com" actually receive mails.

//Example 2:

$emails2 = ["a@leetcode.com","b@leetcode.com","c@leetcode.com"]; //Output: 3

//Example 3:

$emails3 = [ "test.email+alex@leetcode.com","test.email@leetcode.com"];

echo numUniqueEmails($emails2);