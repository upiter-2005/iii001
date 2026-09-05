# Word-counter cheatsheet

Rules for the `word-counter` demo skill to apply when counting text.

## Words
- A "word" is any maximal run of non-whitespace characters.
- Split on whitespace (spaces, tabs, newlines) and count the resulting
  tokens; punctuation attached to a word (e.g. `"hello,"`) still counts as
  one word.

## Characters
- Report **total characters** (every character, including spaces and
  punctuation) and **characters excluding whitespace** separately.

## Sentences
- A "sentence" ends at `.`, `!`, or `?`, optionally followed by a closing
  quote or bracket.
- Collapse runs of terminal punctuation (e.g. `"...")` or `"?!"`) into a
  single sentence boundary - don't double-count them.
- Ignore trailing whitespace/newlines at the very end of the text when
  deciding if the last sentence counts.

## Notes
- This is a deliberately simple heuristic for demo purposes, not a
  linguistically rigorous tokenizer - edge cases like abbreviations
  ("Dr. Smith") or decimal numbers ("3.14") may be over- or under-counted.
