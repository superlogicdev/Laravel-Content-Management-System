@include(Theme::getThemeNamespace('views.loop'), compact('posts') + ['description' => $tag->description])
