let isResizing = false;
let currentResizer;
let startX, startWidthLeft, startWidthRight;

document.querySelectorAll('.resizer').forEach((resizer) => {
    resizer.addEventListener('mousedown', (e) => {
        isResizing = true;
        currentResizer = resizer;

        const leftEditor = resizer.previousElementSibling;
        const rightEditor = resizer.nextElementSibling;

        startX = e.clientX;
        startWidthLeft = leftEditor.getBoundingClientRect().width;
        startWidthRight = rightEditor.getBoundingClientRect().width;

        document.body.style.cursor = 'ew-resize';
        e.preventDefault();
    });
});

document.addEventListener('mousemove', (e) => {
    if (!isResizing) return;

    const dx = e.clientX - startX;
    const leftEditor = currentResizer.previousElementSibling;
    const rightEditor = currentResizer.nextElementSibling;

    const containerWidth = document.getElementById('editor-container').offsetWidth;
    const newWidthLeft = ((startWidthLeft + dx) / containerWidth) * 100;
    const newWidthRight = ((startWidthRight - dx) / containerWidth) * 100;

    if (newWidthLeft > 5 && newWidthRight > 5) {
        leftEditor.style.flex = ${newWidthLeft};
        rightEditor.style.flex = ${newWidthRight};
    }
});

document.addEventListener('mouseup', () => {
    isResizing = false;
    document.body.style.cursor = 'default';
});