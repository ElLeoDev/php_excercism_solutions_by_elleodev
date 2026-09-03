<?php

// function language_list(): array
// {
//     // implement the language list function
//     return [];
// }

function language_list(...$items): array
{
    return $items;
}

function add_to_language_list(array $language_list, string $language): array
{
    $language_list[] = $language;
    return $language_list;
}

function prune_language_list(array $language_list): array
{
    return array_slice($language_list, 1);
}

function current_language(array $language_list): mixed
{
    return $language_list[0];
}

function language_list_length(array $language_list): int
{
    return count($language_list);
}
