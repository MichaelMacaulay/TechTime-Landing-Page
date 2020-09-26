# TechTime-Landing-Page

This is a landing page that collects email addresses.
It uses the sheetson API to send the name & email of the user to a Google Sheets.
That Google Sheets document will run a script to automatically send a welcome email to the user, with their first name included in the email.

The only thing you'd need to do after this is hook up your website to a service that would allow you to send emails to everyone on your mailing list.

Most email service providers (gmail, yahoo, etc) allow a few hundred emails a day, which will let you start small, but will not scale well.

There are a number of services to use such as Amazon's SES or sendinblue.
