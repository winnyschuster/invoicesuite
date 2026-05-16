<!-- omit in toc -->
# Contributing to horstoeko/invoicesuite

First off, thanks for taking the time to contribute! ❤️

All types of contributions are encouraged and valued. See the [Table of Contents](#table-of-contents) for different ways to help and details about how this project handles them. Please make sure to read the relevant section before making your contribution. It will make it a lot easier for us maintainers and smooth out the experience for all involved. The community looks forward to your contributions. 🎉

> And if you like the project, but just don't have time to contribute, that's fine. There are other easy ways to support the project and show your appreciation, which we would also be very happy about:
> - Star the project
> - Tweet about it
> - Refer this project in your project's readme
> - Mention the project at local meetups and tell your friends/colleagues

<!-- omit in toc -->
## Table of Contents

- [I Have a Question](#i-have-a-question)
- [I Want To Contribute](#i-want-to-contribute)
  - [Reporting Bugs](#reporting-bugs)
  - [Suggesting Enhancements](#suggesting-enhancements)
  - [Pull Requests](#pull-requests)



## I Have a Question

> If you want to ask a question, we assume that you have read the available [Documentation](https://github.com/horstoeko/invoicesuite).

Before you ask a question, it is best to search for existing [Issues](https://github.com/horstoeko/invoicesuite/issues) that might help you. In case you have found a suitable issue and still need clarification, you can write your question in this issue. It is also advisable to search the internet for answers first.

If you then still feel the need to ask a question and need clarification, we recommend the following:

- Open an [Issue](https://github.com/horstoeko/invoicesuite/issues/new?assignees=horstoeko&labels=question&projects=&template=question.md&title=%5BQUESTION%5D).
- Answer all questions in the issue template as completely as possible. Questions with missing or incomplete information may not be processed.
- Provide a clear and concise question.
- Describe what you are trying to achieve.
- Provide screenshots, sample code and additional context when they help to understand your question.
- Provide context information when it is relevant, especially the horstoeko/invoicesuite version, PHP version, operating system and operating system version.
- Mention the affected invoice format, profile, provider or workflow when your question is related to a specific part of the library, for example XRechnung, ZUGFeRD, Factur-X, a reader, a builder, validation, PDF handling, visualization or console commands.

We will then take care of the issue as soon as possible.

## I Want To Contribute

> ### Legal Notice <!-- omit in toc -->
> When contributing to this project, you must agree that you have authored 100% of the content, that you have the necessary rights to the content and that the content you contribute may be provided under the project license.

### Reporting Bugs

<!-- omit in toc -->
#### Before Submitting a Bug Report

A good bug report shouldn't leave others needing to chase you up for more information. Therefore, we ask you to investigate carefully, collect information and describe the issue in detail in your report. Bug reports with missing or incomplete information may not be processed. Please complete the following steps in advance to help us fix any potential bug as fast as possible.

- Make sure that you are using the latest version.
- Determine if your bug is really a bug and not an error on your side e.g. using incompatible environment components/versions (Make sure that you have read the [documentation](https://github.com/horstoeko/invoicesuite). If you are looking for support, you might want to check [this section](#i-have-a-question)).
- To see if other users have experienced (and potentially already solved) the same issue you are having, check if there is not already a bug report existing for your bug or error in the [bug tracker](https://github.com/horstoeko/invoicesuite/issues?q=label%3Abug).
- Also make sure to search the internet (including Stack Overflow) to see if users outside of the GitHub community have discussed the issue.
- Collect information about the bug:
  - A clear and concise description of the bug
  - Step-by-step instructions to reproduce the behavior
  - The expected behavior and the actual behavior
  - Screenshots, if they help to explain the problem
  - Sample code, if it helps to explain or reproduce the problem
  - The horstoeko/invoicesuite version
  - OS and OS version (for example Windows 11, Debian 12 or macOS)
  - PHP version
  - The affected invoice format, profile, provider or workflow when relevant
  - Any input document, generated output, validation result or console output that helps to reproduce the problem
  - Any other context that may help to understand the problem

<!-- omit in toc -->
#### How Do I Submit a Good Bug Report?

> You must never report security related issues, vulnerabilities or bugs including sensitive information to the issue tracker, or elsewhere in public. Instead sensitive bugs must be sent by email to <security-horstoeko-invoicesuite@erling.com.de>.
<!-- You may add a PGP key to allow the messages to be sent encrypted as well. -->

We use GitHub issues to track bugs and errors. If you run into an issue with the project:

- Open an [Issue](https://github.com/horstoeko/invoicesuite/issues/new?assignees=horstoeko&labels=bug&projects=&template=bug_report.md&title=%5BBUG%5D).
- Answer all questions in the bug report template as completely as possible.
- Explain the behavior you would expect and the actual behavior.
- Please provide as much context as possible and describe the *reproduction steps* that someone else can follow to recreate the issue on their own. This usually includes your code. For good bug reports you should isolate the problem and create a reduced test case.
- Provide the information you collected in the previous section.

Once it's filed:

- The project team will label the issue accordingly.
- A team member will try to reproduce the issue with your provided steps. If there are no reproduction steps or no obvious way to reproduce the issue, the team will ask you for those steps and mark the issue as `needs-repro`. Bugs with the `needs-repro` tag will not be addressed until they are reproduced.
- If the team is able to reproduce the issue, it will be marked `needs-fix`, as well as possibly other tags (such as `critical`), and the issue will be left to be [implemented by someone](#pull-requests).

<!-- You might want to create an issue template for bugs and errors that can be used as a guide and that defines the structure of the information to be included. If you do so, reference it here in the description. -->


### Suggesting Enhancements

This section guides you through submitting an enhancement suggestion for horstoeko/invoicesuite, **including completely new features and minor improvements to existing functionality**. Following these guidelines will help maintainers and the community to understand your suggestion and find related suggestions. Feature requests with missing or incomplete information may not be processed.

<!-- omit in toc -->
#### Before Submitting an Enhancement

- Make sure that you are using the latest version.
- Read the [documentation](https://github.com/horstoeko/invoicesuite) carefully and find out if the functionality is already covered, maybe by an individual configuration.
- Perform a [search](https://github.com/horstoeko/invoicesuite/issues?q=label%3Aenhancement) to see if the enhancement has already been suggested. If it has, add a comment to the existing issue instead of opening a new one.
- Find out whether your idea fits with the scope and aims of the project. It's up to you to make a strong case to convince the project's developers of the merits of this feature. Keep in mind that we want features that will be useful to the majority of our users and not just a small subset. If you're just targeting a minority of users, consider writing an add-on/plugin library.
- Describe the affected invoice format, profile, provider or workflow when the enhancement is related to a specific part of the library.

<!-- omit in toc -->
#### How Do I Submit a Good Enhancement Suggestion?

- Open an [issue](https://github.com/horstoeko/invoicesuite/issues/new?assignees=horstoeko&labels=enhancement&projects=&template=feature.md&title=%5BFEATURE%5D).
- Answer all questions in the feature request template as completely as possible.
- Use a **clear and descriptive title** for the issue to identify the suggestion.
- Provide a clear and concise description of the suggested feature or improvement.
- Describe the expected behavior and explain why you expected to see this behavior.
- Describe the motivation and the use case for the feature.
- Mention related standards, profiles, BT rules, validation requirements or interoperability requirements when they are relevant.
- You may want to **include screenshots and animated GIFs** which help you demonstrate the steps or point out the part which the suggestion is related to. You can use [this tool](https://www.cockos.com/licecap/) to record GIFs on macOS and Windows, and [this tool](https://github.com/colinkeenan/silentcast) or [this tool](https://github.com/GNOME/byzanz) on Linux. <!-- this should only be included if the project has a GUI -->
- Include sample code when it helps to explain the feature request.
- Add any other context that may help to understand the feature request.

### Pull Requests

Pull requests are only reviewed and merged when the pull request template is answered as completely as possible and all relevant checks are in a clean state. This includes coding style, PHPStan, tests and any other checks required by the project.

<!-- omit in toc -->
#### Before Opening a Pull Request

- Keep the change focused and avoid unrelated modifications.
- Make sure the change is linked to a related issue when possible.
- Update the documentation when the change requires a documentation update.
- Add or update tests when the change fixes a bug or adds functionality.
- Run the relevant checks locally before committing.

<!-- omit in toc -->
#### What Should a Pull Request Contain?

- A summary of the change.
- The issue that is fixed, using `Fixes #...` when applicable.
- The motivation and context for the change.
- Any dependencies that are required for the change.
- The relevant type of change from the pull request template.
- A description of the tests that were run.
- Instructions that allow the change to be reproduced and verified.
- The test configuration, especially OS, OS version and PHP version.
- The affected invoice format, profile, provider or workflow when relevant.

<!-- omit in toc -->
#### Quality Checks

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

Before submitting a pull request, please make sure that:

- `composer checkstyle:run` was run before committing and passed.
- `composer phpcsfixer:run` was run if possible coding style issues had to be fixed.
- The relevant unit tests were run locally.
- The code follows the style guidelines of this project.
- A self-review was performed.
- Hard-to-understand code is commented where this is helpful.
- Corresponding documentation changes were made.
- The change generates no new warnings.
- Tests proving the fix or feature were added where applicable.
- New and existing unit tests pass locally.
- Any dependent changes have been merged and published in downstream modules.
- All questions in the pull request template were answered completely.
<!--
### Your First Code Contribution
include Setup of env, IDE and typical getting started instructions?

### Improving The Documentation
Updating, improving and correcting the documentation

## Styleguides
### Commit Messages

## Join The Project Team
## Attribution
-->
