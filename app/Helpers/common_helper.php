<?php

function extractYouTubeID(string $url): string
{
    preg_match(
        '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([^\s&]+)/',
        $url,
        $matches
    );
    return $matches[1] ?? '';
}