# Notes

## Blade Templates
- Double curly braces `{{ }}` in blade files are used to display PHP expressions
- Blade files compile into plain PHP code under the hood
- Views are stored in `resources/views` directory

## Components
- Components help create reusable UI elements
- A blade component using `<x-component-name>` syntax
- Components can accept props and attributes
- `$attributes` is a special variable containing all passed attributes
- Components can use slots to inject content