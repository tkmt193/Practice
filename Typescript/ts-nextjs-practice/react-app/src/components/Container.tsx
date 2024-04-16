import { useState, useCallback } from "react";
import { Button } from './Presentational';

const usePopup = () => {
    const cb = useCallback((text:string) => {
        prompt(text)
    }, [])
    return cb
}

type CountButtonProps = {
    label: string
    maximum: number
}

export const CountButton = (props: CountButtonProps) => {
    const { label, maximum } = props
    const displayPopup = usePopup()
    const [count, setCount] = useState(0)
    const onClick = useCallback(() => {
        const newCount = count + 1
        setCount(newCount)

        if (newCount >= maximum) {
            displayPopup(`Youve clicked ${newCount}times `)
        }
    // eslint-disable-next-line react-hooks/exhaustive-deps
    },[count,maximum])

    const disabled = count >= maximum
    const text = disabled?'Cant click anymore':`Click ${count} times`
    return (
        <Button disabled={disabled} label={label} text={text} onClick={onClick} />
    )
}
