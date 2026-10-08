# Assessor Management App

## Overview
A Laravel-based web application for managing assessors, clients, and field operations. Features include user management, live tracking, client intake, assessment assignment, notifications, audit trail, and secure API.

## Tech Stack
- Laravel 10 (PHP 8.1)
- Vue.js 3, Vite, Tailwind CSS
- MySQL, Redis
- Leaflet.js for maps

## Setup Instructions
1. Clone repo
2. Copy `.env.example` to `.env` and configure
3. Run `composer install` and `npm install`
4. Run `php artisan migrate --seed`
5. Start dev server: `php artisan serve` and `npm run dev`

## Running Tests
- `php artisan test` (feature/unit/integration)
- `./vendor/bin/pint --check` (code style)
- `./vendor/bin/phpstan analyse` (static analysis)

## API Documentation
See `docs/API.md` for endpoints and usage.

## Development Workflow
- TDD: Write tests first
- Feature branches per user story
- Code reviews required
- Use ADRs in `docs/adr/` for major decisions

## Quickstart
See `quickstart.md` for end-to-end scenarios.
