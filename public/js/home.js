const container = $("#home_ipsum"),
    content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit ut massa a tristique. Aenean at felis vitae risus dictum maximus. Vestibulum ut nisl lacinia, efficitur nunc eu, tempus mauris. Morbi aliquet, diam a iaculis laoreet, felis ex condimentum felis, quis rhoncus lectus sem quis magna. Nunc nibh lorem, fringilla at condimentum sed, hendrerit sed nibh. Vivamus molestie lacus vitae enim suscipit fringilla accumsan et urna. Nullam vestibulum suscipit urna, non euismod erat. Quisque ac neque sagittis, viverra tellus ac, maximus nunc. Etiam tristique felis eu nulla condimentum luctus vitae quis nulla. Proin viverra blandit ipsum, id vehicula velit auctor eu. Phasellus in mauris id urna imperdiet tempus. Proin molestie tincidunt urna, vel auctor dui rutrum eget. Pellentesque vitae tempor magna. Nulla sit amet blandit enim. Ut lacus nisi, auctor in purus a, consectetur tristique"

let template = ''

for(let f = 0; f < 6; f++){
    template += 
    `<div class="col">
        <p class="m-0">${ content }</p>
    </div>`
}

container.html(template)