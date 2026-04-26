---
description: Step-by-step PHP and JavaScript code quality testing workflow
---

# Code Quality Testing Workflow

This workflow runs a comprehensive set of PHP and JavaScript/TypeScript code quality tools in sequence to ensure your Laravel application meets high standards.

## Prerequisites

Ensure all dependencies are installed:

```bash
composer install
pnpm install
```

## Step 1: oxlint (JavaScript/TypeScript Linting)

oxlint is a fast JavaScript/TypeScript linter that catches potential bugs and enforces code quality standards in your frontend code.

**Run oxlint to check for issues**:

```bash
pnpm lint
```

Or directly:

```bash
pnpm exec oxlint resources/
```

**Run oxlint without auto-fix**:

```bash
pnpm exec oxlint resources/ --fix=false
```

oxlint is configured to lint the `resources/` directory which contains your Vue components and other frontend assets.

## Step 2: oxfmt (JavaScript/TypeScript Formatting)

oxfmt is a fast JavaScript/TypeScript code formatter that ensures consistent code style across your frontend codebase.

**Run oxfmt to check formatting** (dry-run):

```bash
pnpm format:check
```

**Apply formatting fixes**:

```bash
pnpm format
```

Or directly:

```bash
pnpm exec oxfmt resources/
```

oxfmt is configured to format the `resources/` directory.

## Step 3: Rector (Code Modernization)

Rector automatically upgrades and modernizes your PHP code to follow best practices and newer PHP versions.

**Run in dry-run mode first** (preview changes without applying them):

```bash
composer rector
```

**Apply the changes** if you're satisfied with the preview:

```bash
composer rector:fix
```

Rector is configured in `rector.php` and includes rules for:

- PHP 8.5 compatibility
- Code quality improvements
- Dead code elimination
- Type declarations
- Privatization
- Early returns
- Strict booleans

## Step 4: PHPStan (Static Analysis)

PHPStan performs static analysis to find potential bugs and type errors in your code.

**Run PHPStan analysis**:

```bash
vendor/bin/phpstan analyse app tests --level=max
```

If you don't have a `phpstan.neon` configuration file, you can create one to customize the analysis level, paths to analyze, and ignore specific errors.

**Common PHPStan options**:

- `--level=0` to `--level=9` (higher is stricter)
- `--error-format=table` for formatted output
- `--memory-limit=1G` if you encounter memory issues

## Step 5: Laravel Pint (Code Style)

Laravel Pint automatically formats your PHP code to match Laravel's coding style standards (PSR-12).

**Run Pint to check formatting** (dry-run):

```bash
vendor/bin/pint --test
```

**Apply formatting fixes**:

```bash
vendor/bin/pint
```

**Format specific files or directories**:

```bash
vendor/bin/pint app/Http/Controllers
vendor/bin/pint tests/Feature
```

Pint uses Laravel's default preset, but you can customize it by creating a `pint.json` file in the project root.

## Step 6: Pest Tests (Automated Testing)

Pest is the testing framework used for unit and feature tests.

**Run all tests**:

```bash
composer test
```

Or directly:

```bash
vendor/bin/pest
```

**Run specific test suites**:

```bash
vendor/bin/pest tests/Unit
vendor/bin/pest tests/Feature
```

**Run a specific test file**:

```bash
vendor/bin/pest tests/Feature/Auth/LoginTest.php
```

**Run tests with coverage** (requires Xdebug):

```bash
vendor/bin/pest --coverage
```

**Run tests in parallel** (`brianium/paratest` is bundled with Pest 4):

```bash
composer test:parallel
```

Or directly:

```bash
vendor/bin/pest --parallel
```

**Note**: With small test suites (<50 tests), parallel execution overhead can make it marginally slower than sequential. The benefit grows significantly with larger test suites and on multi-core CI runners.

## Recommended Workflow Order

Run these tools in the following order for best results:

1. **oxlint** - Lint JavaScript/TypeScript code for potential bugs
2. **oxfmt** - Ensure consistent JavaScript/TypeScript formatting
3. **Rector** - Modernize PHP code structure and syntax
4. **PHPStan** - Catch PHP type errors and potential bugs
5. **Laravel Pint** - Ensure consistent PHP code formatting
6. **Pest Tests** - Verify functionality works correctly

## CI/CD Integration

You can integrate these tools into your CI/CD pipeline. Example GitHub Actions workflow:

```yaml
name: Code Quality Checks

on: [push, pull_request]

jobs:
    quality:
        runs-on: ubuntu-latest

        steps:
            - uses: actions/checkout@v4

            - name: Setup PHP
              uses: shivammathur/setup-php@v2
              with:
                  php-version: "8.2"
                  extensions: dom, curl, libxml, mbstring, zip, pdo, sqlite, pdo_sqlite
                  coverage: none

            - name: Setup Node.js
              uses: actions/setup-node@v4
              with:
                  node-version: "20"
                  cache: "pnpm"

            - name: Install dependencies
              run: |
                  composer install --prefer-dist --no-progress --no-suggest
                  pnpm install

            - name: Run oxlint
              run: pnpm lint

            - name: Run oxfmt check
              run: pnpm format:check

            - name: Run Rector
              run: composer rector

            - name: Run PHPStan
              run: vendor/bin/phpstan analyse app tests --level=max

            - name: Run Laravel Pint
              run: vendor/bin/pint --test

            - name: Run Pest Tests
              run: composer test
```

## Troubleshooting

**oxlint errors**: Review the linting errors and fix them in your JavaScript/TypeScript files. You can run with `--fix=false` to see errors without auto-fixing
**oxfmt formatting issues**: Run `pnpm format` to apply formatting, or customize oxfmt rules if the default formatting doesn't fit your style
**Rector fails**: Check `rector.php` configuration and ensure your code doesn't have syntax errors
**PHPStan memory errors**: Increase memory limit with `--memory-limit=2G`
**Pint formatting issues**: Customize rules in `pint.json` if Laravel's preset doesn't fit your style
**Pest test failures**: Check test output for specific failure reasons and fix tests or code accordingly
