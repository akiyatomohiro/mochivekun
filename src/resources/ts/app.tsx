import React from 'react'
import { createRoot } from 'react-dom/client'
import Title from "@/components/Title"

const App: React.FC = () => (
    <div>
        <h1>Hello React !</h1>
        <Title text="Hello World" color="blue" />
        <Title text="React Title Component" color="green" />
    </div>
);

const root = createRoot(
    document.getElementById('app') as HTMLElement
)
root.render(<App />)
