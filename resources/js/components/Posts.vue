<template>
    <div>
        <h2 class="text-center text-monospace text-uppercase">Posts</h2>
        <div
            class="card card-body text-start mb-2"
            v-for="post in posts"
            v-bind:key="post.id"
        >
            <h3 class="text-capitalize badge badge-primary">
                {{ post.title }}
            </h3>
            <p>{{ post.body }}</p>
            <p>
                <span class="bg-secondary text-white p-2">{{
                    post.author
                }}</span>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],
                post: {
                    id: '',
                    title: '',
                    body: '',
                    author: ''
                }
            };
        },
        created() {
            this.fetchPosts();
        },
        methods: {
            fetchPosts() {
                fetch('api/posts')
                    .then(res => res.json())
                    .then(res => {
                        console.log(res);
                        this.posts = res;
                    });
            }
        }
    };
</script>
