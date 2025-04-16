# Live Code Editor ಠ_ಠ

A web-based live code editor for HTML, CSS, and JavaScript. Includes a color picker, gradient/background selector, Font Awesome icon library, and the ability to save and load your projects using PHP backend.

## 🚀 Features
- Live preview of HTML/CSS/JS code
- Custom color picker and gradient/background generator
- Copy-ready UI elements (icons, links, backgrounds)
- Project save and load functionality (saved as files on server)
- Device viewport selector
- Resizable code editor panels

## 🛠 Tech Stack
- HTML, CSS, JavaScript (frontend)
- CodeMirror for code editing
- PHP (backend for saving/loading projects)
- Bootstrap 5, Font Awesome

## 🧩 How to Run
1. Place all files on a PHP-enabled server (e.g., XAMPP, MAMP, or live server).
2. Open `index.php` in your browser.
3. Use the editor and save your project!
4. Projects are saved in the `projects/` directory.

## 📂 File Structure
```
/projects         # Saved projects (auto-generated)
/img              # Icons and images (codedit.png used as favicon)
index.php         # Main app
style.css         # Stylesheet
script.js         # (optional) external script if used
save_project.php  # Save logic
load_project.php  # Load logic
load_projects.php # Lists available projects
```

## 📄 License
MIT License (see LICENSE file).

---
Made with ❤️ using VS Code.
