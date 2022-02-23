<template>
    <div>
        <h3 class="text-center">New Comment</h3>
        <div v-for="(errorArray, idx) in notifmsg" :key="idx">
            <div v-for="(allErrors, idx) in errorArray" :key="idx">
                <span class="text-danger">{{ allErrors}} </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="newComment">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="comment.name">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <input type="text" class="form-control" v-model="comment.body">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'NewComment',
        data() {
            return {
                notifmsg: null,
                comment: {}
            }
        },
        methods: {
            newComment() {
                this.axios
                .post('http://myblog.test/api/comments/store', this.comment)
                .then(()=> {
                    this.$router.push({name: 'home'})
                })
                .catch(e => {
                    this.notifmsg = e.response.data
                })
               }
           }
       }
   </script>