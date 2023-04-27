import React from 'react';

interface TitleProps {
    color: string;
    text: string;
}

const Title: React.FC<TitleProps> = (props) => (
    <h1 style={{ color: props.color }}>{props.text}</h1>
);

export default Title;
