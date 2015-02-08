var feed = new Instafeed({
    get: 'user',
    target: 'instafeed',
    userId: 1560807757,
    clientId: 'b91f941a6da24712b065fda9215e4b04',
    accessToken: '1560807757.467ede5.b46045819bf84be99f1d4c8cb84ffc96',
    sortBy: 'most-liked',
    limit: '18',
    template: '<a class="col-lg-2" href="{{url}}" target="_blank"><img class="fill-it-up" src="{{image}}" /></a>',
    resolution: 'low_resolution'
});
feed.run();