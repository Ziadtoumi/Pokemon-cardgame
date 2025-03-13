function showEffect(pack, effectType) {
    let effect = document.createElement('div');
    effect.className = 'effect ' + effectType;
    pack.appendChild(effect);
    effect.style.display = 'block';
    
    setTimeout(() => {
        effect.remove();
    }, 1000);
}