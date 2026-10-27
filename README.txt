PRIVATE CONFIGURATION NOTES

When NIPOST issues your authorised developer credentials:
1. Read the current API documentation for the exact URL, authentication header,
   request body, response fields, rate limits, and sandbox/production rules.
2. Store secrets in server environment variables, not in index.php, app.js,
   a public repository, or screenshots.
3. Update api/validate-postcode.php to call the documented endpoint from PHP.
4. Parse only documented response fields and show the resolved location so the
   customer can confirm it before creating a delivery.
5. Never replace an unrecognized postcode with a nearby postcode.
6. Use test data for the pitch demonstration and follow the applicable NIPOST
   terms and Nigeria Data Protection Act requirements.

Do not commit credentials to GitHub.
