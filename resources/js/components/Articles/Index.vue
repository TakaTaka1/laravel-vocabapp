<template>
  <div>
    <div v-for="article in articles">
      <div class="row">
        <div class="thumbs">
        </div>
        <div class="book-data">
          <router-link :to="'/api/book/' + article.id">{{ article.title }}</router-link>
          {{article.title}}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  created() {
    this.fetchArticles()
  },
  data() {
    return {
      articles: []
    }
  },
  methods: {
    fetchArticles() {
      this.$http({
        url: '/api/book',
        method: 'GET'
      }).then(res =>  {
        this.articles =  res.data
      })
    }
  }
}
</script>