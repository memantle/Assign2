import './bootstrap';
import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './film-app.jsx'
// function App() {
//   return (
//     <div>
//       This is a div. Changed this.
//     </div>
//   )
// }

createRoot(document.querySelector('#react-content')).render(
  <StrictMode>
    <App/>
  </StrictMode>,
)