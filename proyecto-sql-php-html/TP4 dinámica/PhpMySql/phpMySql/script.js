document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.createElement('canvas');
    document.body.insertBefore(canvas, document.body.firstChild);
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    canvas.style.position = 'fixed';
    canvas.style.top = '0';
    canvas.style.left = '0';
    canvas.style.zIndex = '-1';
    canvas.style.pointerEvents = 'none';

    const ctx = canvas.getContext('2d');

    class TextLine {
        // El constructor se utiliza para inicializar los atributos de la línea de texto
        constructor(text, isLeft) {
            this.text = text; // El texto que se mostrará en el canvas
            this.isLeft = isLeft; // Booleano que indica si el texto estará alineado a la izquierda o derecha

            // Tamaño de la fuente del texto, valor fijo
            this.fontSize = 40;

            // Posición X de la línea de texto: si isLeft es true, el texto está a la izquierda (25% del ancho),
            // de lo contrario, está a la derecha (75% del ancho)
            this.x = isLeft ? canvas.width * 0.25 : canvas.width * 0.75;

            // Posición inicial Y: un valor aleatorio dentro de la altura del lienzo
            this.y = Math.random() * canvas.height;

            // Velocidad vertical inicial: aleatoria en un rango que puede hacer que el texto
            // se mueva hacia arriba o hacia abajo. El rango es entre -2 y 2 (se multiplica por 4).
            this.vy = (Math.random() - 0.5) * 4; // Velocidad inicial aleatoria
        }

        // Método para actualizar la posición de la línea de texto en cada frame
        update() {
            // Incrementa la posición Y por la velocidad actual (vy), moviendo el texto
            this.y += this.vy;

            // Aumenta la velocidad vertical en cada frame, simulando el efecto de la gravedad.
            this.vy += 0.1; // Gravedad

            // Condición para detectar si la línea de texto ha llegado a los límites del canvas (superior o inferior)
            // Si la posición Y está por debajo del límite superior (fontSize) o por encima del límite inferior
            if (this.y < this.fontSize || this.y > canvas.height - this.fontSize) {
                // Invertir la velocidad para simular un rebote y reducirla ligeramente
                this.vy *= -0.9;

                // Ajusta la posición para asegurarse de que no sobrepase los límites del canvas.
                // Si está por encima del borde superior, se ajusta a `fontSize`,
                // si está por debajo del borde inferior, se ajusta a `canvas.height - fontSize`
                this.y = this.y < this.fontSize ? this.fontSize : canvas.height - this.fontSize;
            }
        }

        // Método para dibujar la línea de texto en el canvas
        draw() {
            ctx.fillStyle = '#00ff00'; // Color del texto: verde
            ctx.font = `${this.fontSize}px Righteous`; // Fuente y tamaño del texto
            ctx.textAlign = this.isLeft ? 'left' : 'right'; // Alineación del texto: izquierda o derecha
            ctx.fillText(this.text, this.x, this.y); // Dibuja el texto en la posición X e Y actuales
        }
    }

    const lines = [
        new TextLine('SOFIA BASCUR', true),
        new TextLine('IGNACIO CIRE', false)
    ];

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        lines.forEach(line => {
            line.update();
            line.draw();
        });

        requestAnimationFrame(animate);
    }

    animate();

    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        // Actualiza la posición X en función del tamaño del canvas
        lines.forEach(line => {
            line.x = line.isLeft ? canvas.width * 0.25 : canvas.width * 0.75;
        });
    });
});
