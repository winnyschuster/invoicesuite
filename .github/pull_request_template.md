## Pull request requirements

- Open or reference an accepted issue before starting larger changes.
- Submit only one logical change per pull request.
- Explain why the change is necessary.
- Add or update meaningful tests.
- Confirm that you have personally reviewed and tested every submitted change.
- Unrequested bulk refactorings, formatting changes, generated documentation
  changes, and repository-wide mechanical edits may be closed without review.
- The submitter remains fully responsible for generated or automated content.
- Automated or AI-supported changes are only permitted if the submitter has checked, 
  tested and comprehensibly justified each change themselves.

# Description

Please answer all questions in this template as completely as possible. Pull requests with missing or incomplete information will not be reviewed or merged.

Please include a summary of the change and which issue is fixed. Also include the relevant motivation and context. List any dependencies that are required for this change.

Fixes # (issue)

## Type of change

Please delete options that are not relevant.

- [ ] Bug fix (non-breaking change which fixes an issue)
- [ ] New feature (non-breaking change which adds functionality)
- [ ] Breaking change (fix or feature that would cause existing functionality to not work as expected)
- [ ] Documentation-only change
- [ ] This change requires a documentation update

## Affected area

If applicable, name the affected invoice format, profile, provider or workflow, for example XRechnung, ZUGFeRD, Factur-X, a reader, a builder, validation, PDF handling, visualization or console commands.

## How has this been tested?

Please describe the tests that you ran to verify your changes. Provide instructions so the changes can be reproduced. Also list any relevant details about your test configuration.

- [ ] Test A
- [ ] Test B

**Test configuration**

- OS:
- OS version:
- PHP version:

## Checklist

Pull requests are only reviewed and merged when all relevant checks are in a clean state. This includes coding style, PHPStan, tests, and any other checks required by the project.

The main quality check can be run with:

```bash
composer checkstyle:run
```

This runs the lint check, PHP-CS-Fixer in dry-run mode and PHPStan.

Possible coding style issues can be fixed by running:

```bash
composer phpcsfixer:run
```

Unit tests can be run with:

```bash
composer tests
```

- [ ] I ran `composer checkstyle:run` before committing and the quality check passed
- [ ] I ran `composer phpcsfixer:run` if possible coding style issues had to be fixed
- [ ] I ran the relevant unit tests locally
- [ ] My code follows the style guidelines of this project
- [ ] I have performed a self-review of my own code
- [ ] I have commented my code where this is helpful, particularly in hard-to-understand areas
- [ ] I have made corresponding changes to the documentation
- [ ] My changes generate no new warnings
- [ ] I have added tests that prove my fix is effective or that my feature works
- [ ] New and existing unit tests pass locally with my changes
- [ ] Any dependent changes have been merged and published in downstream modules
- [ ] I answered all questions in this template completely
