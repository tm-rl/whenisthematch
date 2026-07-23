=== WhenIsTheMatch Widget ===
Contributors: whenisthematch
Tags: football, soccer, fixtures, live scores
Requires at least: 6.0
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later

Display your team's next match and live score.

== Description ==

Show your visitors the next match of their favorite football team.

Features:
* Next match countdown
* Live score updates
* 800+ teams
* Multiple languages

== Usage ==

Add the widget using the shortcode:

[whenisthematch team="my-team-slug"]

Available parameters:

team
(required)
The team slug used in the widget URL.

lang
(optional)
The language of the widget. If omitted, English is used.

Available languages:
* English (default)
* French (fr)
* Spanish (es)
* Italian (it)
* German (de)
* Portuguese (pt)
* Japanese (ja)
* Hindi (hi)

branding
(optional)
Display a small WhenIsTheMatch attribution link below the widget.

Example:
[whenisthematch team="spain" lang="es" branding="true"]

== Frequently Asked Questions ==

= Where can I find team slugs? =

You can find the correct team slug on WhenIsTheMatch.

Search for your team on https://whenisthematch.com
Open your team's page.
The team slug is the last part of the URL.

Example:

Team page:
https://whenisthematch.com/team/spain

Team slug:
spain

== External Services ==

This plugin embeds match information from WhenIsTheMatch.

The widget loads content from:
https://whenisthematch.com

No account or API key is required.

== Screenshots ==

1. The widget displayed on a WordPress page.
2. The shortcode used to add a team's next match.

== Changelog ==

= 1.0.0 =
* Initial release.