# Jigsaw Minimal Starter Template

The cleanest way to start building a static site with Jigsaw.

## Installation

After installing Jigsaw, run the following command from your project directory:

```bash
vendor/bin/jigsaw init otonielguajardo/jigsaw-minimal-template
```

## Adding Assets

This template does not include an asset bundling tool by default.

You can add your static assets to the `source/assets/` directory and reference them in your Blade views using `{{ url('assets/') }}`