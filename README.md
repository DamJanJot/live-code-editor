# Live Code Editor

An interactive web-based code editor that allows you to write and preview HTML, CSS, and JavaScript live — all in one screen. 
It also includes a color picker, tools for copying ready-to-use colors, gradients, backgrounds, and Font Awesome icon library, to speed up your workflow. You can also save your work as named projects and reload them at any time for further editing.

---

## Features

- Live preview of HTML/CSS/JS code  
- Custom color picker and gradient/background generator  
- Copy-ready UI elements (icons, links, backgrounds)  
- Project save and load functionality (saved as files on server)  
- Device viewport selector  
- Resizable code editor panels  

---

## Technologies Used

- HTML, CSS, JavaScript (frontend)  
- [CodeMirror](https://codemirror.net/) for code editing  
- PHP (backend for saving/loading projects)  
- Bootstrap 5  
- Font Awesome  

---

## Installation

1. Place all files on a PHP-enabled server (e.g., XAMPP, MAMP, or live server).  
2. Open `index.php` in your browser.  
3. Use the editor and save your project.  
4. Projects are saved in the `projects/` directory.  

---

## File Structure

```
/projects          # Saved projects (auto-generated)
/img               # Icons and images (codedit.png used as favicon)
index.php          # Main app
style.css          # Stylesheet
script.js          # JavaScript
save_project.php   # Save logic
load_project.php   # Load logic
load_projects.php  # Lists available projects
```

---

## License

MIT License (see LICENSE file).

---

Made with ❤️ using VS Code.
