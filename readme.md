# E-mail HTML Encoder

Problem:
Spam robots trawl the web for email address and pick them up for spam mailing.

Solution:
Encode an email address into a set of HTML mnemonics.

## Example
`example@gmail.com` converted to:
`&#101;&#120;&#97;&#109;&#112;&#108;&#101;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;`

## Usage

Method will find the email address and only encode it

```
$encodeMail->encodeMail(string $inputext);
```

__inputext__
    text string that will encode the email address



