<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <h3 class="text-secondary">My Blog</h3>
        </div>

        <div class="container bg-white">
            <div class="mb-2">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <router-link to="/" class="nav-item nav-link">Home</router-link>
                            </li>
                             <li class="nav-item">
                                <router-link to="/create" class="nav-item nav-link">Create a Comment</router-link>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

            </div>
            <div class="row">
                <div class="col-xs-12 col-12 col-md-12 col-lg-4">
                    <h5 class="text-white p-1" style="background-color:black;">Responsive Sub Menu</h5>
                    <router-link to="/" class="nav-item nav-link text-dark">Home</router-link>
                    <router-link to="/create" class="nav-item nav-link text-dark">Create a Comment</router-link>
                </div>
                <div class="col-xs-12 col-12 col-md-12 col-lg-8">
                    <h5 class="text-white p-1" style="background-color:black;">Blog Post</h5>
                    <p>
                    We, at Aloware, saw one thing that most contact center solutions are missing: the importance of building personal relationships. With the many ways we can communicate and the wealth of the data we can gather, many things in business are reduced to numbers. <br/>
                    We seek to humanize the demand around sales with automation that frees up time, so there is more opportunity to talk to customers and make genuine connections. We believe that businesses also win in trust and loyalty. <br/>
                    </p>
                    <p>
                    Aloware didn’t start out of a garage, as your typical silicon valley startup goes. We started in sunny Los Angeles, on top of Anoosh’s and Sohrab’s expertise as consultants in the contact center and cloud communication space.
                    </p>
                    <p>
                    Before Aloware, our founders were already helping companies embrace new communication channels to support customers. From migrating phone stacks to the cloud to automating common follow-up tasks, they have helped many businesses modernize.
                    </p>
                    <router-view></router-view>
                </div>
            </div>


        </div>
        <br/>
    </div>
</template>

<script>
    export default {}
</script>