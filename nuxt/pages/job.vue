<template>
  <section class="section">
    <div class="container">
      <h2 class="title">JOBS</h2>
      <ul v-if="jobs">
        <li v-for="job in jobs" :key="job.id" class="card">
          <div class="card-content">
            <a :href="link(job)" target="_blank">
              <strong>{{ job.title.rendered }}</strong>
              <br />
              <small class="is-small">{{ job.acf.company.name }}</small>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
import axios from 'axios'

export default {
  data: () => {
    return {
      jobs: null
    }
  },
  async created() {
    await axios.get('https://job.cinra.net/wp-json/wp/v2/job').then((rs) => {
      this.jobs = rs.data
    })
  },
  methods: {
    link(job) {
      return 'https://job.cinra.net' + job.link
    }
  }
}
</script>
