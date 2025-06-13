# Booking System Skeleton

This directory contains a minimal PHP implementation for the booking system described in the specifications.
It is **not** production ready but should provide a starting point. The code demonstrates:

- Google OAuth based authentication restricted to the `chewathai.com` domain.
- Basic MySQL schema for storing bookings for meeting rooms, company car and Zoom accounts.
- Example forms for creating bookings.
- Placeholder email integration using [Resend](https://resend.com/).

## Setup

1. Copy `config.sample.php` to `config.php` and fill in the required values (database connection, Google OAuth keys, Resend API key).
2. Import `schema.sql` into your MySQL server.
3. Install dependencies using Composer:

```bash
composer install
```

4. Set the Google OAuth redirect URI to `https://booking.chewaclub.com/booking-system/oauth2callback.php`.
5. Deploy the `booking-system` directory to a PHP capable hosting provider.

## Limitations

- This is a very small demonstration and does not implement the full feature set.
- Admin permissions, conflict checking, reports and many other features are left as future work.

