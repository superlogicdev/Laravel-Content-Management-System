@include(Theme::getThemeNamespace('views.loop'), compact('posts') + ['description' => $category->description])
