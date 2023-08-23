const spinButton = document.getElementById('spinButton');
const resultText = document.getElementById('result');
const prizes = ['3 días gratis', 'Stickers exclusivos', 'Acceso VIP'];

spinButton.addEventListener('click', () => {
  const randomIndex = Math.floor(Math.random() * prizes.length);
  resultText.textContent = `¡Has ganado: ${prizes[randomIndex]}!`;
});
