# Placeholder time plugin for Kimai

Configure certain activities as a placeholder time. Should only serve as information for the user, e.g. for completed overtime.

Placeholder times can be edited, but the duration is not used in the UI and not saved!

### Configure an activity

When editing any activity, you will see a new checkbox `Placeholder time`.
If this is checked, every future timesheet using this activity, will have negative durations.

## Installation

This plugin is compatible with the following Kimai releases:

| Bundle version | Minimum Kimai version |
|----------------|-----------------------|
| 2.0 - 2.0.1    | 2.0.0                 |
| 1.0            | 1.27.0                |

You find the most notable changes between the versions in the file [CHANGELOG.md](CHANGELOG.md).

Download and extract the [compatible release](https://github.com/Keleo/PlaceholderTimeBundle/releases) in `var/plugins/` (see [plugin docs](https://www.kimai.org/documentation/plugin-management.html)).

The file structure needs to look like this afterwards:

```bash
var/plugins/
├── PlaceholderTimeBundle
│   ├── PlaceholderTimeBundle.php
|   └ ... more files and directories follow here ...
```

And then rebuild the cache:
```bash
bin/console kimai:reload --env=prod
```
