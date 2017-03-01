var tabs = document.querySelectorAll('.tabs a')
for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', function (e) {

        // Variables
        var li = this.parentNode
        var div = this.parentNode.parentNode.parentNode

        if(li.classList.contains('active')){
            return false;
        }

        // ON RETIRE la class active de l'ongleet actif
        div.querySelector('.tabs .active').classList.remove('active')
        // J'ajoute la class active à l'onglet actuel
        li.classList.add('active')

        // ON retire la class active sur le contenu actif
        div.querySelector('.tab-content.active').classList.remove('active')
        // J'ajoute la class active sur le contenu correspondant à monn clic
        div.querySelector(this.getAttribute('href')).classList.add('active')

    })
}