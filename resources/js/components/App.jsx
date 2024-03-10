import { useState } from 'react'

export default function App() {
    const [title, setTitle] = useState('Laravel')

    return <h1 onMouseEnter={() => setTitle('React')} onMouseLeave={() => setTitle('Laravel')}>
        {title}
    </h1>
}
