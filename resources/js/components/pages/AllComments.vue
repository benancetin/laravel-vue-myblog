<template>
    <div>
        <h3 class="text-center">All Comments</h3><br/>
        <router-link to="/create" class="btn btn-dark btn-sm mb-3">Create a Comment</router-link><br/>
        <div v-for="comment in comments" :key="comment.id" class="row">
            <div class="col-xs-12 col-12 col-md-12 col-lg-12">
                <div>
                 <strong> {{ comment.name }} </strong> ;
             </div>
             <div class="pb-0">
                <p>
                    {{ comment.body }}
                </p>
            </div>
            <div>
                <i>{{ moment(comment.created_at).format("lll") }}</i>
                <div class="btn-group float-right" role="group">
                    <router-link :to="{name: 'reply', params: { id: comment.id }}" class="btn btn-dark btn-sm">Reply</router-link>
                </div>
            </div>
            <hr style="height:1px;border-width:0;color:black;background-color:black">
            <div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
    import moment from 'moment'

    export default {
        data() {
            return {
                comments: [],
                moment: moment
            }
        },

        created() {
            this.axios
            .get('http://myblog.test/api/comments/index')
            .then(response => {
                this.comments = response.data;
            });
        },
        methods: {
        }
    }
</script>