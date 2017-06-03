import Hello from '@/components/Hello'
import AccountsList from '../components/accounts/List'
import AccountsView from '../components/accounts/View'
import AccountsCreate from '../components/accounts/Create'
import AccountsEdit from '../components/accounts/Edit'

const routes = [
  { path: '/', name: 'Hello', component: Hello },
  { path: '/contas', component: AccountsList },
  { path: '/contas/novo', component: AccountsCreate },
  { path: '/contas/:id', component: AccountsView },
  { path: '/contas/:id/editar', component: AccountsEdit }

]

export default routes

