# Ogbomoso Smart Delivery — starter prototype

A responsive PHP/HTML/CSS/JavaScript website concept for a local delivery service using Nigeria's Digital Postcode.

## Run locally
1. Install XAMPP.
2. Copy this folder into `C:\xampp\htdocs\` (Windows), or the equivalent `htdocs` folder on your computer.
3. Start Apache in the XAMPP Control Panel.
4. Open `http://localhost/ogbomoso-smart-delivery/`.

The current prototype includes a delivery request form and local postcode-format validation. It does **not** yet verify postcodes against NIPOST, save requests to a database, or send orders to riders.

## Official integration
Use the official developer dashboard and current API docs:
- https://dashboard.postcode.gov.ng/register
- https://docs.postcode.gov.ng
- https://postcode.gov.ng/acceptable-use
- https://www.postcode.gov.ng/terms

Do not guess endpoint URLs or authentication. Add the authorised API call server-side in `api/validate-postcode.php` only after you have access to the current API schema and credentials. Keep secret credentials out of browser code and public repositories.

## Next development milestones
1. Configure and test authorised postcode API lookup.
2. Create MySQL tables for users, businesses, deliveries and status history.
3. Add customer order submission and rider/admin login.
4. Add delivery status updates and basic reporting.
5. Pilot with consent from local vendors/riders and measure delivery outcomes.

This is an independent prototype, not an official NIPOST product.
