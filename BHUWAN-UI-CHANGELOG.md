# BHUWAN UI source customization

This source snapshot is a downstream customization of Rockdactyl v3.0.0 (Pterodactyl Panel 1.15.1 base).

## Changes in this build

- BHUWAN UI branding defaults, Bhuwan RKA attribution, and BHUWAN application name.
- New Arix-inspired violet visual preset with configurable accent color.
- Theme Studio now exposes preset, accent, glass strength, card radius, and motion controls.
- Dashboard grid/list/compact display modes.
- Dashboard privacy mode blurs server allocations and resource usage values.
- Existing Rockdactyl/Pterodactyl API workflows, server features, admin functions, and installer identifiers retained.

## Compatibility and validation

- Upstream baseline: Pterodactyl Panel 1.15.1 / Rockdactyl 3.0.0.
- PHP 8.2/8.3 and Node.js 22+ are the upstream documented build targets.
- This environment could not download Yarn or npm packages, so a frontend production build and Jest suite have not been run.
- The inherited release manager downloads upstream Rockdactyl releases. It must not be used to install this customized source until a BHUWAN UI release package and matching release metadata are published.

## Licensing and attribution

This is a modified downstream distribution. GPLv3 and upstream attribution obligations remain in force. The original Rockdactyl, NookTheme, Pterodactyl, and third-party copyright notices are retained. BHUWAN UI branding does not claim ownership of upstream code.
