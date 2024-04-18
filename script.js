document.addEventListener('DOMContentLoaded', function () {
    const promoItems = document.querySelectorAll('.promo-item');
    let indiceAtual = 0;

    function showPromo(index) {
        promoItems.forEach((item, i) => {
            if (i === index) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function nextPromo() {
        indiceAtual++;
        if (indiceAtual >= promoItems.length) {
            indiceAtual = 0;
        }
        showPromo(indiceAtual);
    }

    showPromo(indiceAtual); // Mostra a primeira promoção
    setInterval(nextPromo, 2000); // Alterna as promoções a cada 2 segundos
});