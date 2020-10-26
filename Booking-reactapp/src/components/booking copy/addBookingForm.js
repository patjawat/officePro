import React, { useState } from "react";
import ReactDOM from "react-dom";
import { useForm, Controller } from "react-hook-form";
// import Header from "./Header";
import ReactDatePicker from "react-datepicker";
import NumberFormat from "react-number-format";
import ReactSelect from "react-select";
// import Mui from "./Mui.js";
import ButtonsResult from "./ButtonsResult";
import AntD from "./AntD";


import "react-datepicker/dist/react-datepicker.css";
import "antd/dist/antd.css";
// import "./styles.css";

let renderCount = 0;

const defaultValues = {
  // Native: "",
  TextField: "",
  // Select: "",
  // ReactSelect: { value: "vanilla", label: "Vanilla" },
  // Checkbox: false,
  // switch: false,
  // RadioGroup: "",
  // numberFormat: 123456789,
  // AntdInput: "Test",
  // AntdCheckbox: true,
  // AntdSwitch: true,
  // AntdSlider: 20,
  // AntdRadio: 1,
  // downShift: "apple",
  // ReactDatepicker: "",
  // AntdSelect: "",
  // DraftJS: EditorState.createEmpty(),
  // MUIPicker: new Date("2020-08-01T00:00:00"),
  // country: { code: "AF", label: "Afghanistan", phone: "93" },
  // ChakraSwitch: true
};

export default function App() {
  const { handleSubmit, reset, control } = useForm({ defaultValues });
  const [data, setData] = useState(null);
  // renderCount++;

  return (
    <div className="row">
    <div className="col-8">

    <form onSubmit={handleSubmit((data) => {
// setData(data)
console.log(JSON.stringify(data))
    }
    )} className="form">
      <hr />

      <AntD control={control} />

      {/* <Chakra control={control} /> */}

      <ButtonsResult {...{ data, reset, defaultValues }} />
    </form>
            
    </div>
    </div>
  );
}
