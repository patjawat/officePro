import React,{useState} from "react";
import { Controller } from "react-hook-form";
import {
    Input,
    Select,
    Checkbox as AntdCheckbox,
    Switch as AntdSwitch,
    Slider as AntdSlider,
    Radio,
    Checkbox,
    InputNumber,
} from "antd";
import SelectForm from "../selectForm";


const { TextArea } = Input;
// const { Option } = Select;
const plainOptions = ['NoteBook', 'Pear', 'Orange'];
const options = [
    { label: 'NoteBook', value: 'Apple' },
    { label: 'Pear', value: 'Pear' },
    { label: 'Orange', value: 'Orange' },
];

export default function AntD({control}) {
    const  [getRadio,setRadio] = React.useState(null)

    function onChange(checkedValues) {
        console.log('checked = ', checkedValues);
    }
    
    const onRadioChange = e => {
        console.log('radio checked', e.target.value);
        setRadio(e.target.value)
        // this.setState({
        //   value: e.target.value,
        // });
      };


      
    return(
    <div className="container">
        <section>
            <div className="row">
                <div className="col-8">
                    <label>หัวข้อเรื่อง</label>
                    <Controller
                        placeholder="ระบุชื่อเรื่องประชุม"
                        as={Input}
                        control={control}
                        name="AntdInput"
                    />
                </div>
                <div className="col-4">
                    <label>จำนวนผู้เข้าประชุม</label>
                    <br />
                    <InputNumber name="people_qty" as={Input} min={1} max={10} defaultValue={3} control={control} onChange={onChange} />

                </div>
            </div>

        </section>


        <section>
            <label>รายละเอียดในการประชุม</label>
            <TextArea rows={4} />
        </section>
        <div className="row mt-3">
            <div className="col-6">
                <section>
                    <label>อุปกรณ์ : </label>
                    <Checkbox.Group options={plainOptions} defaultValue={['Apple']} onChange={onChange} className="ml-3" />
                </section>
            </div>
            <div className="col-6">
                <section>
                    <label>วัตถุประสงค์ : </label>
                    <Radio.Group onChange={onRadioChange} value={getRadio} className="ml-3">
                        <Radio value={1}>A</Radio>
                        <Radio value={2}>B</Radio>
                        <Radio value={3}>C</Radio>
                        <Radio value={4}>D</Radio>
                    </Radio.Group>
                </section>

            </div>
        </div>


        <div className="row mt-3">
            <div className="col-6">
          <SelectForm />
            </div>
        </div>
    

    </div>

)
    }
