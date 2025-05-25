
  // Número de veces que deseas duplicar el item
  const duplications = 5;

  // Selecciona el contenedor y el primer item
  const container = document.querySelector('.container-items');
  const item = container.querySelector('.item');

  // Clona y agrega los items duplicados
  for (let i = 0; i < duplications; i++) {
    const clone = item.cloneNode(true);
    container.appendChild(clone);
  }
