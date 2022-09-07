import React from "react";

export default function Timer(props) {
  return (
    <div class="">
      <span class="">
        {("0" + Math.floor((props.time / 60000) % 60)).slice(-2)}:
      </span>
      <span class="">
        {("0" + Math.floor((props.time / 1000) % 60)).slice(-2)}.
      </span>
      <span class="">
        {("0" + ((props.time / 10) % 100)).slice(-2)}
      </span>
    </div>
  );
}
