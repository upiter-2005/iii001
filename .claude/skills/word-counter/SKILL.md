---
name: word-counter
description: Counts words, characters, and sentences in a piece of text the user provides. Demonstrates a skill directory that bundles more than one file - SKILL.md plus a reference.md cheatsheet the instructions point to.
---

<!--
DEMO PATTERN: bundled reference file.
A skill's directory can hold more than just SKILL.md - extra Markdown docs,
scripts, templates, etc. Instructions reference them by a path relative to
this file. Here, reference.md holds the counting rules so SKILL.md itself
stays short; Claude reads it before doing the actual counting.
-->

Before counting anything, read `reference.md` (in this same skill
directory, i.e. `.claude/skills/word-counter/reference.md`) - it defines
exactly what counts as a "word" and a "sentence" for this skill.

Then:
1. If the user already gave text in their message, use that. Otherwise,
   ask them to paste the text they want counted.
2. Apply the rules from `reference.md` to compute: word count, character
   count (with and without spaces), and sentence count.
3. Report the three numbers clearly, e.g. as a short bulleted list.

This skill exists mainly to demonstrate the "instructions + bundled
reference file" pattern, so keep the tone light - it's fine to note that
the counting rules came from the bundled cheatsheet.
