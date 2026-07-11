# CS-Cart Multi-Vendor 4.19 Core Code

## Overview

This repository contains the **core source code** of **CS-Cart Multi-Vendor 4.19** used as the base platform for development.

The purpose of this repository is to provide a clean and consistent core codebase for development, staging, and production environments.

> **Important**
> - Do not modify the core code unless absolutely necessary.
> - All customizations should be implemented through Add-ons, Themes, Hooks, and Overrides whenever possible.
> - Keep the core code synchronized across all environments.

---

## Version

| Item | Value |
|------|-------|
| Platform | CS-Cart Multi-Vendor |
| Version | 4.19.x |
| PHP | Refer to CS-Cart 4.19 requirements |
| Database | MySQL / MariaDB |

CS-Cart 4.19 introduces platform improvements while maintaining the standard architecture for add-ons, themes, and extensions. :contentReference[oaicite:0]{index=0}

---

## Repository Structure

```
app/
design/
js/
var/
images/
vendor/
install/
schemas/
config.local.php
admin.php
index.php
```

Main directories:

| Directory | Description |
|-----------|-------------|
| app/ | Core application logic, controllers, add-ons, schemas |
| design/ | Storefront and admin templates |
| js/ | JavaScript assets |
| images/ | Image storage |
| var/ | Cache, logs, compiled templates, uploads |
| vendor/ | Composer dependencies |
| install/ | Installation files |

The platform follows the standard CS-Cart project structure. :contentReference[oaicite:1]{index=1}

---

## Development Guidelines

### DO

- Create new functionality as Add-ons.
- Use Hooks whenever available.
- Override templates instead of editing core templates.
- Keep custom code isolated.
- Follow CS-Cart coding conventions.

### DON'T

- Edit core files without documentation.
- Store environment-specific configuration in Git.
- Commit cache files.
- Commit uploaded files.
- Commit logs.

---

## Git Workflow

Recommended workflow:

```
main
 ├── develop
 ├── feature/*
 ├── hotfix/*
 └── release/*
```

Example:

```
feature/product-image-design
feature/shipping-api
feature/ai-category
hotfix/login-error
```

---

## Environment

### Development

Local development environment.

### Staging

Testing environment.

### Production

Live environment.

The goal is to keep the **core code identical** across Development, Staging, and Production.

Only configuration files, uploaded assets, cache, and environment-specific settings should differ.

---

## Files That Should Not Be Committed

```
var/cache/
var/compiled/
var/session/
var/log/
images/
config.local.php
```

---

## Custom Development

Project-specific customizations should be located inside:

```
app/addons/
design/themes/
design/backend/
```

Avoid modifying:

```
app/functions/
app/Tygh/
app/controllers/
```

unless absolutely required.

---

## Deployment Checklist

Before deployment:

- Pull latest changes
- Install Composer dependencies (if applicable)
- Clear cache
- Rebuild cache
- Verify file permissions
- Test Admin Panel
- Test Storefront
- Test Checkout
- Test Vendor Panel

---

## Cache

To clear cache manually:

```
rm -rf var/cache/*
rm -rf var/compiled/*
```

Or use the Admin Panel cache clearing function.

---

## Coding Standards

- Follow PSR standards where applicable.
- Keep business logic inside Add-ons.
- Avoid hardcoding values.
- Use language variables.
- Keep commits small and descriptive.

---

## Backup

Always create a backup before:

- Updating CS-Cart
- Installing Add-ons
- Database migration
- Core modification

---

## License

This repository contains the licensed source code of **CS-Cart Multi-Vendor**.

Distribution outside the authorized project or organization is prohibited.

---

## References

- CS-Cart Developer Documentation
- CS-Cart Multi-Vendor Documentation
- Internal Development Guidelines