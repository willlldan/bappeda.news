let url = 'https://newsapi.org/v2/everything?apiKey=fe3c1a2c20d34d6e972f01651801b6b7';
let domains = 'republika.co.id,detik.com,viva.co.id,goal.com,suara.com,cnbcindonesia.com,okezone.com,kompas.com,voaindonesia.com,cnnindonesia.com,pikiran-rakyat.com';
let query = 'jawa barat OR ridwan kamil';

$(document).ajaxStart(function () {
    $("#wait").css("display", "block");
});

$(document).ajaxComplete(function () {
    $("#wait").css("display", "none");
});

function showNews() {
    $.ajax({
        url: url,
        method: "GET",
        dataType: "Json",
        data: {
            'q': query,
            'sortBy': 'popularity',
            'domains': domains
        },
        success: function (news) {
            let output = "";
            let latestNews = news.articles;

            for (let i = 0; i < 3; i++) {
                if (i == 0) {
                    $('#caraousel-news').append(`
                <div class="carousel-item active">
                    <a href="${latestNews[i].url}"  target="_blank">
                        <img src="${latestNews[i].urlToImage}" class="d-block w-100 img-caraousel" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>${latestNews[i].title}</h5>
                            <p>${latestNews[i].description}</p>
                        </div>
                    </a>
                </div>
            `)

                } else {
                    $('#caraousel-news').append(`
                <div class="carousel-item">
                    <a href="${latestNews[i].url}"  target="_blank">
                        <img src="${latestNews[i].urlToImage}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>${latestNews[i].title}</h5>
                            <p>${latestNews[i].description}</p>
                        </div>
                    </a>
                </div>
            `)
                }

            }

            $.each(latestNews, function (i, data) {
                if (i < 3) return;
                $('#news-list').append(`
                        <div class="col-md-4">
                            <div class="card mb-3 text-dark bg-light">
                                <img src="${data.urlToImage}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">${data.title}</h5>
                                    <p class="card-text">${data.description}</p>
                                    <a href="${data.url}"  class="btn btn-success float-right"  target="_blank">Detail</a>
                                </div>
                            </div>
                        </div>
            `);
            });

        }
    })
}

function category(query, activeClass) {
    $('#search-list').remove();
    $('.container').append('<div class="row" id="search-list"> </div>')
    $('.caraousel-container').hide();
    $('#news-list').hide();
    $('#jawa-barat').removeClass('active');
    $('#ridwan-kamil').removeClass('active');
    $('#covid').removeClass('active');
    $('#' + activeClass).addClass('active');
    searchNews(query);
}

function mainNews() {
    $('#search-list').remove();
    $('#jawa-barat').removeClass('active');
    $('#ridwan-kamil').removeClass('active');
    $('#covid').removeClass('active');
    $('.caraousel-container').show();
    $('#news-list').show();
}


function searchNews(query) {
    $.ajax({
        url: url,
        method: "GET",
        dataType: "Json",
        data: {
            'qInTitle': query,
            'sortBy': 'popularity',
            'domains': domains
        },
        success: function (news) {
            let output = "";
            let latestNews = news.articles;

            $.each(latestNews, function (i, data) {
                $('#search-list').append(`
             <div class="col-md-4">
                <div class="card mb-3 text-dark bg-light">
                    <img src="${data.urlToImage}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${data.title}</h5>
                        <p class="card-text">${data.description}</p>
                        <a href="${data.url}" class="btn btn-success" target="_blank">Detail</a>
                    </div>
                </div>
            </div>
            `);
            });

        }
    })
}


showNews();

$('#search-input').on('keyup', function () {
    setTimeout(function () { console.log('wait') }, 1000);
    if ($('#search-input').val() == "") {
        console.log('masuk sini');
        $('.caraousel-container').show();
        $('#news-list').show();
        $('#search-list').remove();
    } else {
        $('#search-list').remove();
        $('.container').append('<div class="row" id="search-list"> </div>')
        $('.caraousel-container').hide();
        $('#news-list').hide();
        searchNews($('#search-input').val());
    }
});