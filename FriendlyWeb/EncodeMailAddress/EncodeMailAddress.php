<?php

/*
 * Encode E-mail Address 1.0
 * 
 * Encode an email address into a set of HTML mnemonics.
 * Helps against SPAM robots that trawi the web for email address.
 *
 * Example:
 * 
 * encodeMail('example@gmail.com')
 * 
 * example@gmail.com converted to:
 * &#101;&#120;&#97;&#109;&#112;&#108;&#101;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
 * 
 */

namespace FriendlyWeb;

class EncodeMailAddress { 

	public function encodeMail($inputext = '')
	{

		$returntext = $this->htmlizeEmails($inputext);

		return $returntext;

	}

	// Finds email addresses in content
	// Replace every email address with HTML-ASCII Code
	public function htmlizeEmails($text)
	{
		preg_match_all('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', $text, $potentialEmails, PREG_SET_ORDER);

		$potentialEmailsCount = count($potentialEmails);
		for ($i = 0; $i < $potentialEmailsCount; $i++) {
			if (filter_var($potentialEmails[$i][0], FILTER_VALIDATE_EMAIL)) {
				$ascii_mail_address = $this->encode_email_address($potentialEmails[$i][0]);
				$text = str_replace($potentialEmails[$i][0], $ascii_mail_address, $text);
			}
	    	}

	    return $text;

	}

	// Encode a given string in HTML-ASCII
	private function encode_email_address($email)
	{

		$result = '';

		for ($i = 0; $i < strlen($email); $i++)
		{

			$result .= '&#'.ord($email[$i]).';';

		}

		return $result;

	}

}

?>