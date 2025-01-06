# v1.1.0

## Breaking Changes

- Removed `Registrar` class due to PHP 8.2 deprecating dynamic properties
- Configuration must now be published manually using the command line

## New Configuration Process

1. Run the publish command to set up configuration:
   ```console
   php spark freeradius:publish
   ```
