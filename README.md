# Study in Ukraine — University Admission Portal

A multilingual (English / Arabic) information portal that helps prospective students research universities in Kharkiv, compare study costs and specialties, and submit an admission application by e-mail.

> Built 2017–2018 as a production website for an education consultancy. Published here as portfolio code; the live deployment is no longer maintained.

## Tech stack

| Layer | Technology |
|-------|------------|
| Language | PHP `^7.1.3` |
| Framework | Laravel **5.6.33** |
| Templating | Blade (`resources/views`) |
| Front-end | Bootstrap 4.1.3, jQuery, Lightbox2 gallery |
| Localization | `mcamara/laravel-localization` (EN, AR) |
| Other packages | `fideloper/proxy`, `laravel/tinker`, PHPUnit 7 |
| Database | MySQL — content lives in Blade templates and language files; only stock Laravel migrations exist |

## Features

- **Localized routing** — every page is served under a locale prefix via `LaravelLocalization::setLocale()`.
- **University directory** — dedicated sections for Karazin National University, the National Technical University, radio-electronics, pharmacy, the air force academy, polytechnic and automobile/highway institutes.
- **Study costs & specialties** — fee tables per faculty on a dedicated page.
- **Photo gallery** — Lightbox2-based campus gallery.
- **Application workflow** — two form handlers (`MailController@send_form`, `ApplyController@send_form`) render Blade mail templates and send the application through SwiftMailer.
- **Contact page** with an enquiry form.

## Project structure

```
app/Http/Controllers/     MailController, ApplyController (application + contact forms)
config/                   Laravel config + laravel-localization settings
resources/views/          master layout + registration, about-us, service, informations,
                          universities, fee, photos, contact-us
resources/lang/{en,ar}/   localized page content
routes/web.php           localized route group
public/                  css, js, images, webfonts
database/migrations/     stock Laravel users / password_resets tables
```

## Getting started locally

```bash
composer install          # dependencies are not committed to the repo
cp .env.example .env      # fill in your own values — never commit real credentials
php artisan key:generate
php artisan serve         # http://localhost:8000  →  /en/… and /ar/…
```

## Development timeline (estimated)

No Git history exists for this project, so dates come from dependency versions, embedded content ("Admission 2018–2019 is open") and file timestamps: **November 2017 → September 2018**. Confidence: medium.

## Notes & limitations

- The real `.env` is excluded; only a sanitized `.env.example` is shipped.
- Mail recipients and phone numbers in the source were replaced with placeholders (`admin@example.com`, `[phone hidden]`) for publication.
- Content is hard-coded in Blade templates and language files rather than in a CMS — a deliberate scope decision for a small marketing site at the time.
- Laravel 5.6 is end-of-life; treat this as legacy code, not a current framework reference.

## Screenshots

Captured locally by running the app in Docker (PHP 7.4 + MySQL 5.7), see [portfolio/local-run](https://github.com/bandarsiri2026/portfolio#run-any-project-locally).

![Home page (EN) with the university catalogue and search(screenshots/portal-universities.png)

*Home page (EN) with the university catalogue and search*

![Same site in Arabic (RTL layout via laravel-localization)(screenshots/portal-ar.png)

*Same site in Arabic (RTL layout via laravel-localization)*

## License

MIT — see [LICENSE](LICENSE). The code is released under MIT; third-party assets (client product photos, fonts, brand imagery) are not covered by this license and belong to their respective owners.
